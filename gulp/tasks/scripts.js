const gulp = require("gulp");
const webpack = require("webpack-stream");
const notify = require("gulp-notify");

const config = {
    entry: "./src/js/app.js",
    output: {
        filename: "app.js"
    },
    module: {
        loaders: []
    }
};

gulp.task("scripts", function() {
    return gulp.src("./src/js/app.js")
        .pipe(webpack(config))
        .on("error", notify.onError(function(error) {
            return {
                title: "Scripts",
                message: error.message
            };
        }))
        .pipe(gulp.dest("./dist"));
});