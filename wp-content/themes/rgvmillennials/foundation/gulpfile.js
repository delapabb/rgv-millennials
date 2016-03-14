var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

var jsPaths = [
  'bower_components/jquery/dist/jquery.js',
  'thirdparty/slidebars/slidebars.js',
  'js/app.js'
];

gulp.task('sass', function() {
  return gulp.src('scss/style.scss')
    .pipe($.sass({
      includePaths: sassPaths
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('../'));
});

gulp.task('javascript', function() {
  return gulp.src(jsPaths)
    .pipe($.concat('app.js'))
    .pipe(gulp.dest('../js'))
});

gulp.task('default', ['sass','javascript'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
  gulp.watch(jsPaths, ['javascript']);
});