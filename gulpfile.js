var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS     = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify');

gulp.task('browser-sync', ['styles', 'scripts'], function() {
		browserSync.init({
				proxy: "completedprojects/modX",
				notify: false
		});
});

gulp.task('styles', function () {
	return gulp.src('assets/sass/*.sass')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('assets/app/css'))
	.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		'./assets/app/libs/modernizr/modernizr.js',
		'./assets/app/libs/jquery/jquery-1.11.2.min.js',
		'./assets/app/libs/waypoints/waypoints.min.js',
		'./assets/app/libs/animate/animate-css.js',
		'./assets/app/libs/Magnific-Popup/jquery.magnific-popup.min.js',
		'./assets/app/libs/animateNumber/jquery.animateNumber.min.js',
		'./assets/app/libs/equalHeights/equalHeights.min.js',
		'./assets/app/libs/owl-carousel/owl.carousel.min.js',
		'./assets/app/libs/selectize/dist/js/standalone/selectize.min.js',
		])
		.pipe(concat('libs.js'))
		.pipe(uglify()) //Minify libs.js
		.pipe(gulp.dest('./assets/app/js/'));
});

gulp.task('watch', function () {
	gulp.watch('assets/sass/*.sass', ['styles']);
	gulp.watch('assets/app/libs/**/*.js', ['scripts']);
	gulp.watch('assets/app/js/*.js').on("change", browserSync.reload);
	gulp.watch('assets/app/*.html').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);
