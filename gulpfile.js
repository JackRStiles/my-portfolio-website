var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpif = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');

// Compile SASS into CSS
function style() {
    return gulp.src('app/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.stream());
}

// Move and minify files
gulp.task('build', function() {
    return gulp.src('app/*.html')
    .pipe(useref())
    .pipe(gulpif('*.js', uglify()))
    .pipe(gulpif('*.css', cssnano()))
    .pipe(gulp.dest('dist'));
});

gulp.task('images', function() {
    return gulp.src('app/images/**/*.+(png|jpg|gif|svg)')
    .pipe(cache(imagemin({
        interlaced: true
    })))
    .pipe(gulp.dest('dist/images'))
});

// Watch for file changes
function watch() {
    browserSync.init({
        server: {
            baseDir: './app',
            index: '/index.html'
        }
    });

    gulp.watch('app/scss/**/*.scss', style)
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

// Exports
exports.style = style;
exports.watch = watch;