import gulp from 'gulp';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import cleanCSS from 'gulp-clean-css';
import sourcemaps from 'gulp-sourcemaps';
import uglify from 'gulp-uglify';
import imagemin from 'gulp-imagemin';
import { deleteAsync } from 'del';
import gulpSass from 'gulp-sass';
import * as dartSass from 'sass'

const sass = gulpSass(dartSass);


// paths to sources
const paths = {
    scss: './src/scss/**/*.scss',
    css: './dist/css',
    js: './src/js/**/*.js',
    jsDest: './dist/js',
    images: './src/img/**/*',
    imagesDest: './dist/images',
    fonts: './src/fonts/**/*.{woff,woff2}',
    fontsDest: './dist/fonts'
};


// Task for compiling SCSS to CSS
export const scss = () => {
  return gulp
    .src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.css));
};

// Task to process and minify JavaScript files
export const js = () => {
  return gulp
    .src(paths.js)
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.jsDest));
};

// Task to optimize images
export const images = () => {
  return gulp
    .src(paths.images)
    .pipe(
      imagemin([
        imagemin.mozjpeg({ quality: 50, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
      ])
    )
    .pipe(gulp.dest(paths.imagesDest));
};

export const fonts = () => {
  return gulp
    .src(paths.fonts)
    .pipe(gulp.dest(paths.fontsDest));
};

// Task to clean the "dist" folder
export const clean = () => {
  return deleteAsync(['dist']);
};

// Task to watch for changes in files
export const watch = () => {
  gulp.watch(paths.scss, scss);
  gulp.watch(paths.js, js);
  gulp.watch(paths.images, images);
  gulp.watch(paths.fonts, fonts);
};

// Default task to clean, build, and start the watch process
export default gulp.series(clean, gulp.parallel(scss, js, images, fonts), watch);
