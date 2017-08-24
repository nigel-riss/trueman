const gulp = require("gulp");
const watch = require("gulp-watch");
const browserSync = require("browser-sync").create();

gulp.task("watch", function() {
    browserSync.init({
        server: {
            baseDir: "dist"
        }
    });

    // pug
    watch("./src/**/*.pug", function() {
        gulp.start("pugChanged");
    });

    // css
    watch("./src/**/*.scss", function() {
        gulp.start("cssInject");
    });

    // js
    watch("./src/js/**/*.js", function() {
        gulp.start("scriptsRefresh");
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

gulp.task("scriptsRefresh", ["scripts"], function() {
    browserSync.reload();
});