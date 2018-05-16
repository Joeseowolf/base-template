var gulp = require('gulp');
var bs = require('browser-sync').create(); // create a browser sync instance.

gulp.task('default', function () {
  bs.init({
    proxy: 'http://localhost:80/dist'
  });
  gulp.watch("dist/index.html").on("change", bs.reload);
  gulp.watch("dist/style.css").on("change", bs.reload);
});