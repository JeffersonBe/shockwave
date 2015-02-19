// Based on http://markgoodyear.com/2014/01/getting-started-with-gulp/

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css')
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('styles', function () {
  return gulp.src('app/assets/css/*.scss')
  .pipe(sass())
  .pipe(minifycss())
  .pipe(concat('main.css'))
  .pipe(gulp.dest('public/build/'))
});

gulp.task('images', function() {
  return gulp.src(['app/assets/img/*.png', 'app/assets/img/**/*.png', 'app/assets/img/*.jpg', 'app/assets/img/**/*.jpg'])
  .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
  .pipe(gulp.dest('public/img'));
});

gulp.task('scripts', function() {
  return gulp.src(['app/assets/js/*.js', 'app/assets/js/**/*.js'])
  .pipe(concat('main.js'))
  .pipe(uglify())
  .pipe(gulp.dest('public/build/'));
});

gulp.task('clean', function(cb) {
  del(['public/css', 'public/js', 'public/img'], cb)
});

gulp.task('default', ['clean'], function() {
  gulp.start('styles', 'scripts', 'images');
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('app/assets/css/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('app/assets/js/*.js', ['scripts']);

  // Watch image files
  gulp.watch(['app/assets/img/*.*, app/assets/**/*.*'], ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['public/**']).on('change', livereload.changed);

});
