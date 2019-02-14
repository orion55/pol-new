var gulp = require('gulp')
var plumber = require('gulp-plumber')
var rename = require('gulp-rename')
var sass = require('gulp-sass')
var autoPrefixer = require('gulp-autoprefixer')
var gcmq = require('gulp-group-css-media-queries')
var cleanCss = require('gulp-clean-css')
var concat = require('gulp-concat')
var sassGlob = require('gulp-sass-glob')
var gutil = require('gulp-util')
var ftp = require('vinyl-ftp')

var docs = '../assets/'
var subfolder = 'css'

gulp.task('sass', function () {
  subfolder = 'css'
  gulp.src(['./css/main.scss'])
    .pipe(plumber({
      handleError: function (err) {
        console.log(err)
        this.emit('end')
      }
    }))
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(autoPrefixer())
    .pipe(gcmq())
    .pipe(concat('main.css'))
    .pipe(gulp.dest(docs + 'css/'))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(cleanCss({level: {1: {specialComments: 0}}}))
    .pipe(gulp.dest(docs + 'css/'))
})

gulp.task('deploy-ftp', function () {

  var conn = ftp.create({
    host: 'grol55wy.beget.tech',
    user: 'grol55wy_pol',
    password: 'grol55wy_pol',
    parallel: 10,
    log: gutil.log
  })

  const path = '/wp-content/themes/polclean/assets/'

  var globs = [
    '../assets/' + subfolder + '/**'
  ]

  console.log(path + subfolder)
  conn.rmdir(path + subfolder, function (e) {
    if (e === undefined) {
      return gulp.src(globs, {base: '.', buffer: false})
        .pipe(conn.newer(path)) // only upload newer files
        .pipe(conn.dest(path))
    }
    return console.log(e)
  })
})

gulp.task('watch', function () {
  gulp.watch(['./css/**/*.scss', './css/main.scss'], ['sass', 'deploy-ftp'])
})

gulp.task('default', ['sass', 'watch'])