// Initialize modules
// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
const {
  src,
  dest,
  watch,
  series,
  parallel
} = require('gulp')

// Importing all the Gulp-related packages we want to use
const gulp = require('gulp')
const rename = require('gulp-rename')
const plumber = require('gulp-plumber')
const sass = require('gulp-sass')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const cssnano = require('cssnano')
var replace = require('gulp-replace')
const browserSync = require('browser-sync').create()

// File paths
const files = {
  scssPath: 'app/styles/scss/init.scss',
  jsPath: 'app/scripts/src/**/*.js'
}

// Sass task: compiles the style.scss file into style.css

function css() {
  return src(files.scssPath)
    .pipe(plumber())
    .pipe(sass())
    .pipe(rename('style.css'))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest('wp-content/themes/hypetur'))
    .pipe(browserSync.stream())
}

// JS task: concatenates and uglifies JS files to script.js
function js() {
  return src([
      files.jsPath
      //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(dest('wp-content/themes/hypetur/scripts'))
}

// Watch task: watch SCSS and JS files for changes
// If any change, run scss and js tasks simultaneously
// function watchTask() {
//   watch([files.scssPath, files.jsPath],
//     parallel(scssTask, jsTask))
// }

function watchTask() {
  // var files = ['wp-content/themes/hypetur/*.php', 'wp-content/themes/hypetur/*.css'];
  browserSync.init({
    // server: {
    //   baseDir: 'wp-content/themes/hypetur',
    // },
    options: {
      reloadDelay: 250
    },
    notify: true,

    proxy: "http://localhost:8080"
  })
  watch('wp-content/themes/hypetur/*.css', css)
  watch('wp-content/themes/hypetur/*.php').on('change', browserSync.reload)
  watch('app/scripts/src/**/*.js').on('change', browserSync.reload)
}

// Export the default Gulp task so it can be run
// Runs the scss and js tasks simultaneously
// then runs cacheBust, then watch task
exports.default = series(
  parallel(css, js),
  watchTask
)