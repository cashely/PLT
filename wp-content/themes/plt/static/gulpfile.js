var gulp = require('gulp'),
    less = require('gulp-less');

gulp.task('less', function () {
    gulp.src('css/*.less')
        .pipe(less())
        .pipe(gulp.dest('css'));
});
gulp.task('watch', function () {
    gulp.watch('css/*.less', ['less']);
});
