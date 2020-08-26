let project_folder = "dist";
let source_folder = "src";

let path = {
    build: {
        html: project_folder + "/",
        css: project_folder + "/ccs/",
        js: project_folder + "/js/",
        img: project_folder + "/img/",
        fonts: project_folder + "/fonts/",
    },
    src: {
        html: source_folder + "/*.html",
        css: source_folder + "/sccs/style.scss",
        js: source_folder + "/js/script.js",
        img: source_folder + "/img/**/*.{jpg,png,svg,giv,ico,webp}",
        fonts: source_folder + "/fonts/*.ttf",
    },
    watch: {
        html: source_folder + "/**/*.html",
        css: source_folder + "/sccs/**/*.scss",
        js: source_folder + "/js/**/*.js",
        img: source_folder + "/img/**/*.{jpg,png,svg,giv,ico,webp}",
    },
    clean: "./" + project_folder + "/"
}

let { src, dest } = require('gulp'),
    gulp = require('gulp'),
    browsersync = require("browser-sync").create();

function browserSync() {
    browsersync.init({
        server: {
            baseDir: "./" + project_folder + "/"
        },
        port: 3000,
        notify: false
    })
}

function html() {
    return src(path.src.html)
        .pipe(dest(path.build.html))
        .pipe(browsersync.stream())

}

let build = gulp.series(html);
let watch = gulp.parallel(build, browserSync);

exports.html = html;
exports.build = build;
exports.watch = watch;
exports.default = watch;