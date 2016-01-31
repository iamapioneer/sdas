var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var concat = require('gulp-concat');

gulp.task('sass', function () {
	return gulp.src([
			'css/theme.css',
			'css/reset.css', 
			'css/*.scss'])
		.pipe(sass().on('error', sass.logError))
		.pipe(concat('style.css'))
		.pipe(gulp.dest(''));
});

gulp.task('watch', function() {

	gulp.watch('css/**/*.scss', ['sass']);

});

gulp.task('default', ['sass', 'watch']);
