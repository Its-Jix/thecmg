var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    prefix      = require('gulp-autoprefixer');

 /**
 * @task sass
 * Compile files from scss
 */
gulp.task('sass', function () {
  return gulp.src('scss/style.scss') // the source .scss file
  .pipe(sass()) // pass the file through gulp-sass
  .pipe(prefix(['last 4 versions'], { cascade: true })) // pass the file through autoprefixer
  .pipe(gulp.dest('css')) // output .css file to css folder
});

/**
 * @task watch
 * Watch scss files for changes & recompile
 */
gulp.task('watch', function () {
  gulp.watch(['scss/*.scss', 'scss/**/*.scss'], ['sass']);
});

/**
 * Default task, running just `gulp` will 
 * compile Sass files, watch files.
 */
gulp.task('default', ['watch']);