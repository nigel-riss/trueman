const gulp = require("gulp");
const watch = require("gulp-watch");
const browserSync = require("browser-sync").create();

gulp.task("watch", function() {
    browserSync.init({
        server: {
            baseDir: "dist"
        }
    });

    watch("./src/**/*.pug", function() {
        gulp.start("pugChanged");
    });

    watch("./src/**/*.scss", function() {
        gulp.start("cssInject");
    });
});

gulp.task("pugChanged", ["pugRender"], function() {
    browserSync.reload();
});

gulp.task("cssInject", ["styles"], function() {
    // return gulp.src("./dist/styles.css")
    gulp.src("./dist/styles.css")
        .pipe(browserSync.stream());
});