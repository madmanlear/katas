var gulp = require('gulp'),
    notify = require('gulp-notify'),
    phpunit = require('gulp-phpunit'),
    exec = require('child_process').exec;

gulp.task('phpunit', function() {
    gulp.src('')
        .pipe(phpunit());
});

gulp.task('default', function() {
    gulp.watch('**/*.php', { debounceDelay: 2000 }, ['phpunit']);
});