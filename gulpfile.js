const gulp         = require('gulp');
const sass         = require('gulp-sass');
const watch        = require("gulp-watch");
const jshint       = require('gulp-jshint');
const uglify       = require('gulp-uglify');
const plumber      = require('gulp-plumber');
const concat       = require('gulp-concat');
const imagemin     = require('gulp-imagemin');
const cleanCss     = require('gulp-clean-css');
const sourcemaps   = require('gulp-sourcemaps');
const autoprefix   = require('gulp-autoprefixer');
const browserSync  = require('browser-sync').create();
const reload       = browserSync.reload;

var onError = function(err){
  console.log("se ha producido un error: ", err.message);
  this.emit("end");
}

gulp.task('sass',function(){
  return gulp.src('./scss/**/*.scss')
          .pipe(plumber({errorHandler:onError}))
          .pipe(sourcemaps.init())
          .pipe(sass({
            outputStyle: 'compresed',
            errorLogToConsole : true
          }))
          .pipe(autoprefix("last 2 versions"))
          .pipe(gulp.dest('./css'))
          .pipe(cleanCss({keepSpecialComments: 1}))
          .pipe(sourcemaps.write("./maps"))
          .pipe(gulp.dest('./css'))
});

gulp.task('lint', function() {
 return gulp.src('./js/**/*.js')
   .pipe(jshint())    
});

gulp.task('js',['lint'], () => {
  return gulp.src([
    './js/**/*.js'
  ])
  .pipe(concat('all.min.js'))
  // .pipe(uglify())
  .pipe(gulp.dest('./js'))
});

gulp.task('imagemin', function() {
 return gulp.src('src/images/raw/**/*.**')
   .pipe(plumber({errorHandler:onError}))
   .pipe(imagemin({
      progressive : true,
      interlaced  : true
   }))
   .pipe(gulp.dest("src/images/final"))
});

gulp.task('browser-sync',function(){
  var archivos = [
    './css/**/*.css',
    './*.php',
    './scss/**/*.scss',
    './js/**/*.js',
    './template-parts/**/*.php',
    './custom/**/*.php',
    './inc/**/*.php',
    './images/**/*.**'

  ];
  browserSync.init(archivos,{
    proxy : 'http://localhost/udemy_gym/',
    notify : false
  })
});

gulp.task('font-awesome', () => {
  return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
  .pipe(gulp.dest('./css'));
})

gulp.task('fonts', () => {
  return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('./fonts'));
});

gulp.task("watch",['sass','js','imagemin','browser-sync', 'font-awesome', 'fonts'], function(){
    gulp.watch("./scss/**/*.scss", ["sass"])
});

gulp.task('default', ['sass','js','imagemin','browser-sync', 'font-awesome', 'fonts','watch']);
