const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const browserSync = require('browser-sync').create()
const watch = require('gulp-watch')
const sourcemaps = require('gulp-sourcemaps')
const notify = require('gulp-notify')
const plumber = require('gulp-plumber')
const fileinclude = require('gulp-file-include')
const uglify = require('gulp-uglify')
const clean = require('gulp-clean')
const htmlmin = require('gulp-htmlmin')
const csso = require('gulp-csso')
const cleanCSS = require('gulp-clean-css')
const gulpif = require('gulp-if')

// Два режима сборки
// gulp - разработка
// gulp prod - продакшен, минификация файлов
const prod = false
if (process.env.NODE_ENV == 'production') prod = true

const dist = './dist/'

// Задача для старта сервера
gulp.task('server', function () {
  browserSync.init({
    // server: {
    //   baseDir: dist,
    // },
    proxy: 'razum',
  })
})

gulp.task('watch', function () {
  watch(['index.php', 'en/index.php', 'src/css/**.css', 'src/js/**.js'], gulp.parallel(browserSync.reload))
  watch('src/scss/*.scss', gulp.parallel('sass'))
  watch(['./src/js/**/*.js'], gulp.parallel('copy-js'))
  watch(['./src/css/**/*.css'], gulp.parallel('copy-css'))
  watch(['./src/images/**/*.*'], gulp.parallel('copy-images'))
  watch(['./src/video/**/*.*'], gulp.parallel('copy-video'))
  watch(['./src/mail/**/*.*'], gulp.parallel('copy-mail'))
  watch(['./ru/**/*.*'], gulp.parallel('ru'))
  watch(['./en/**/*.*'], gulp.parallel('en'))
  watch(['./src/lang/**/*.*'], gulp.parallel('copy-lang'))
  watch(['./index.php', './src/page-sections/*.*'], gulp.parallel('html'))
})

gulp.task('copy-js', () => {
  return gulp
    .src('./src/js/**/*.js')
    .pipe(gulpif(prod, uglify()))
    .pipe(gulp.dest(dist + 'js'))
    .on('end', browserSync.reload)
})
gulp.task('copy-css', () => {
  return gulp
    .src('./src/css/**/*.css')
    .pipe(gulp.dest(dist + 'css'))
    .pipe(gulpif(prod, cleanCSS()))
    .on('end', browserSync.reload)
})
gulp.task('copy-images', () => {
  return gulp
    .src('./src/images/**/*.*')
    .pipe(gulp.dest(dist + 'images'))
    .on('end', browserSync.reload)
})
gulp.task('copy-video', () => {
  return gulp
    .src('./src/video/**/*.*')
    .pipe(gulp.dest(dist + 'video'))
    .on('end', browserSync.reload)
})
gulp.task('copy-mail', () => {
  return gulp
    .src('./src/mail/**/*.*')
    .pipe(gulp.dest(dist + 'mail'))
    .on('end', browserSync.reload)
})
gulp.task('copy-parts', () => {
  return gulp
    .src('./src/parts/**/*.*')
    .pipe(gulp.dest(dist + 'parts'))
    .on('end', browserSync.reload)
})
// gulp.task('copy-ru', () => {
//   return gulp.src('./ru/**/*.*').pipe(gulp.dest(dist)).on('end', browserSync.reload)
// })
// gulp.task('copy-en', () => {
//   return gulp.src('./en/**/*.*').pipe(gulp.dest(dist)).on('end', browserSync.reload)
// })
gulp.task('copy-lang', () => {
  return gulp
    .src('./src/lang/**/*.*')
    .pipe(gulp.dest(dist + 'lang'))
    .on('end', browserSync.reload)
})
gulp.task('copy-fonts', () => {
  return gulp
    .src('./src/fonts/**/*.*')
    .pipe(gulp.dest(dist + 'fonts'))
    .on('end', browserSync.reload)
})

gulp.task('copy-pages-ru', () => {
  return gulp.src('./ru/pages/**/*.*').pipe(gulp.dest(dist)).on('end', browserSync.reload)
})
gulp.task('copy-pages-en', () => {
  return gulp
    .src('./en/pages/**/*.*')
    .pipe(gulp.dest(dist + 'en'))
    .on('end', browserSync.reload)
})

gulp.task('copy-favicon', () => {
  return gulp.src('./src/images/favicon.*').pipe(gulp.dest(dist)).on('end', browserSync.reload)
})

gulp.task('copy-htaccess', () => {
  return gulp.src('./.htaccess').pipe(gulp.dest(dist)).on('end', browserSync.reload)
})

gulp.task(
  'copy-files',
  gulp.parallel(
    'copy-js',
    'copy-css',
    'copy-images',
    'copy-video',
    'copy-mail',
    'copy-parts',
    'copy-lang',
    'copy-fonts',
    'copy-favicon',
    'copy-pages-ru',
    'copy-pages-en'
    // 'copy-htaccess'
  )
)

gulp.task('sass', function (callback) {
  return gulp
    .src('src/scss/style.scss')
    .pipe(
      plumber({
        errorHandler: notify.onError(function (err) {
          return {
            title: 'Styles',
            sound: false,
            message: err.message,
          }
        }),
      })
    )
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulpif(prod, csso()))
    .pipe(gulp.dest(dist + 'css'))
    .on('end', browserSync.reload)
})
gulp.task('html', function () {
  return gulp
    .src('index.php')
    .pipe(
      plumber({
        errorHandler: notify.onError(function (err) {
          return {
            title: 'HTML include',
            sound: false,
            message: err.message,
          }
        }),
      })
    )
    .pipe(fileinclude({ prefix: '@@' }))
    .pipe(gulpif(prod, htmlmin({ collapseWhitespace: true, removeComments: true })))
    .pipe(gulp.dest(dist))
    .on('end', browserSync.reload)
})
gulp.task('en', function () {
  return gulp
    .src('en/**')
    .pipe(
      plumber({
        errorHandler: notify.onError(function (err) {
          return {
            title: 'HTML include',
            sound: false,
            message: err.message,
          }
        }),
      })
    )
    .pipe(fileinclude({ prefix: '@@' }))
    .pipe(gulpif(prod, htmlmin({ collapseWhitespace: true, removeComments: true })))
    .pipe(gulp.dest(dist + '/en'))
    .on('end', browserSync.reload)
})
gulp.task('ru', function () {
  return gulp
    .src('ru/**')
    .pipe(
      plumber({
        errorHandler: notify.onError(function (err) {
          return {
            title: 'HTML include',
            sound: false,
            message: err.message,
          }
        }),
      })
    )
    .pipe(fileinclude({ prefix: '@@' }))
    .pipe(gulpif(prod, htmlmin({ collapseWhitespace: true, removeComments: true })))
    .pipe(gulp.dest(dist + '/ru'))
    .on('end', browserSync.reload)
})

gulp.task('clean', function () {
  return gulp.src(dist, { read: false }).pipe(clean({ force: true }))
})

gulp.task('default', gulp.series('clean', gulp.parallel('server', 'watch', 'sass', 'html', 'en', 'ru', 'copy-files')))
gulp.task('prod', gulp.series('clean', gulp.parallel('server', 'watch', 'sass', 'html', 'en', 'ru', 'copy-files')))
