var gulp = require("gulp");
var sass = require("gulp-sass");
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

function style() {
    return (
        gulp
            .src('./src/scss/**/*.scss')
            .pipe(sourcemaps.init())
            .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest('./assets/styles'))
    );
}

function scripts(){
    return (
        gulp
            .src(['./src/js/main.js'])
            .pipe(concat('main.js'))
            .pipe(gulp.dest('./assets/js/'))
            .pipe(rename('main.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest('./assets/js')
            )
    );
}


function watch(){
    gulp.watch('src/scss/**/*.scss', gulp.series(style));
    gulp.watch('src/js/**/*.js',gulp.series(scripts));
}
 
exports.style = style;
exports.watch = watch;
exports.scripts = scripts;
exports.default = watch;