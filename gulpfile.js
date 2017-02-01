var gulp = require('gulp'),
  addsrc = require('gulp-add-src'),
  autoprefixer = require('gulp-autoprefixer'),
  concat = require('gulp-concat'),
  gutil = require('gulp-util'),
  jshint = require('gulp-jshint'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  uglify = require('gulp-uglify');


var config = {};
config.projectName = 'application';
config.isProduction = gutil.env.prod;
config.publicPath = 'assets/';
config.srcPath = 'src/';

config.vendor = {
  'js': [
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/jquery-ui/jquery-ui.min.js',
    'bower_components/metisMenu/dist/metisMenu.min.js',
    'bower_components/select2/select2.min.js',
    'bower_components/moment/min/moment.min.js',
    'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
    'bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
    'bower_components/jquery-validation/dist/jquery.validate.min.js',
    'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    'bower_components/sparkline/index.js',
    'bower_components/summernote/dist/summernote.min.js',
    'bower_components/peity/jquery.peity.min.js',
    'bower_components/toastr/toastr.min.js',
    'bower_components/jquery-flot/jquery.flot.js',
    'bower_components/jquery-flot/jquery.flot.resize.js',
    'bower_components/jquery-flot/jquery.flot.pie.js',
    'bower_components/flot.curvedlines/curvedLines.js',
    'bower_components/jquery.flot.spline/index.js',
    'bower_components/chartist/dist/chartist.min.js',
    'bower_components/d3/d3.min.js',
    'bower_components/c3/c3.min.js',
    'bower_components/Chart.js/Chart.js',
    'bower_components/datatables.net/js/jquery.dataTables.min.js',
    'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
    'bower_components/datatables.net-buttons/js/buttons.html5.min.js',
    'bower_components/datatables.net-buttons/js/buttons.print.min.js',
    'bower_components/datatables.net-buttons/js/dataTables.buttons.min.js',
    'bower_components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'
  ],
  'css': [
    'bower_components/animate.css/animate.css',
    'bower_components/fontawesome/css/font-awesome.css',
    'bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css',
    'bower_components/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.css',
    'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
    'bower_components/summernote/dist/summernote.css',
    'bower_components/summernote/dist/summernote-bs3.css',
    'bower_components/metisMenu/dist/metisMenu.css',
    'bower_components/select2/select2.css',
    'bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
    'bower_components/toastr/toastr.min.css',
    'bower_components/c3/c3.min.css'
  ],
  'sass': [
    'bower_components/bootstrap-sass/assets/stylesheets/'
  ]
};

gulp.task('css', function() {
  // exclude files in vendors with ! to avoid gulp.src ordering problem
  // return gulp.src(config.srcPath + 'sass/**/*.s*ss')
  return gulp.src(config.srcPath + 'sass/application.s*ss')
    .pipe(sourcemaps.init())  // Process the original sources
    // compress css only if gulp is ran with '--prod'
    .pipe(config.isProduction ? sass({ includePaths: config.vendor.sass, outputStyle: 'compressed'}) : sass({ includePaths: config.vendor.sass, sourceComments:true }))

    .pipe(addsrc.prepend(config.vendor.css))

    .pipe(addsrc.prepend(config.srcPath + 'sass/libraries.s*ss')
      .pipe(sourcemaps.init())
      .pipe(config.isProduction ? sass({"includePaths":config.vendor.sass, "outputStyle":"compressed"}) : sass({"includePaths":config.vendor.sass, "sourceComments":true})))

    .pipe(autoprefixer('last 2 version', 'safari 6', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))

    //add .min if gulp is ran with '--prod'
    .pipe(config.isProduction ? concat(config.projectName + '.min.css') : concat(config.projectName + '.css'))
    .pipe(sourcemaps.write('maps')) // Add the map to modified source.
    .pipe(gulp.dest(config.publicPath + 'css'));
});


gulp.task('js', function() {
  // exclude files in vendors with ! to avoid gulp.src ordering problem
  return gulp.src(config.srcPath + 'js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(sourcemaps.init())
    .pipe(addsrc.prepend(config.vendor.js))
    .pipe(addsrc.append(config.srcPath + 'js/application.js'))
    //add .min if gulp is ran with '--prod'
    .pipe(config.isProduction ? concat(config.projectName + '.min.js') : concat(config.projectName + '.js'))
    //only uglify if gulp is ran with '--prod'
    .pipe(config.isProduction ? uglify() : gutil.noop())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest(config.publicPath + 'js'));
});


gulp.task('default', ['js', 'css'], function(){
  if (config.isProduction) {
    gutil.log( 'Building for production' );
    gutil.beep();
  } else {
    gutil.log( 'Building for development' );
  }
});


gulp.task('watch', function() {
  gulp.watch(config.srcPath + 'js/**/*.js', ['js']);
  gulp.watch(config.srcPath + 'sass/**/*.s*ss', ['css']);
});
