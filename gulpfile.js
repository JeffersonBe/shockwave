// Based on http://markgoodyear.com/2014/01/getting-started-with-gulp/
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
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
    sass = require('gulp-sass'),
    paths = {
      scripts: ['app/assets/js/*.js'],
      scriptsBuild: ['app/assets/build/js/*.js'],
      scriptsPublic: ['app/public/js'],
      styles: ['app/assets/css/master.scss'],
      stylesBuild: ['app/assets/build/*.css'],
      stylesPublic: ['app/public/css'],
      images: ['app/assets/img/*.png', 'app/assets/img/**/*.png'],
      imagesPublic: ['app/public/img'],
      fonts:['app/assets/fonts/*']
    };


gulp.task('prod', function(){
  return gulp.src(['app/assets/build/*', 'app/assets/build/**/*'])
  .pipe(gulp.dest('public/build'))
});

gulp.task('sass', function () {
  return gulp.src('app/assets/css/master.scss')
  .pipe(sass())
  .pipe(gulp.dest('app/assets/css'));
});

gulp.task('styles', function () {
  return gulp.src('paths.stylesBuild')
  .pipe(minifycss())
  .pipe(concat('main.css'))
  .pipe(gulp.dest('public/css/'));
});

gulp.task('images', function() {
  return gulp.src('paths.images')
  .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
  .pipe(gulp.dest('public/img'))
});

gulp.task('scripts', function() {
  return gulp.src('paths.scripts')
  .pipe(concat('main.js'))
  .pipe(gulp.dest('public/js'))
  .pipe(rename({suffix: '.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('public/js'))
  .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('fonts', function () {
  return gulp.src('paths.fonts')
  .pipe(gulp.dest('public/fonts/'));
});

gulp.task('clean', function(cb) {
  del(['public/css', 'public/js', 'public/img'], cb)
});

gulp.task('default', ['clean'], function() {
  gulp.start('styles', 'scripts', 'images', 'fonts');
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('paths.styles', ['styles']);

  // Watch .js files
  gulp.watch('paths.scripts', ['scripts']);

  // Watch image files
  gulp.watch('paths.images', ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['public/**']).on('change', livereload.changed);

});
