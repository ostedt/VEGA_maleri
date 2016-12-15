var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/css'));
});

//Watch
gulp.task('watch', function(){
  gulp.watch('assets/scss/**/*.scss', ['sass']);
});

gulp.task('sass', function() {
  return gulp.src('assets/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
})