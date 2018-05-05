var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function () {
  browserSync.init({
    proxy: "http://localhost:80/"
  });
  gulp.watch("./**/*.php").on("change", browserSync.reload);
  gulp.watch("./css/*.css").on("change", browserSync.reload);
});