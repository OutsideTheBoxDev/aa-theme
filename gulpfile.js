const { src, dest, watch, series, task } = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const rename = require("gulp-rename");

var root = process.cwd(),
  styles = root + "/styles",
  paths = {
    clean: styles + "/style.css",
    input: styles + "/sass/**/*.scss",
    output: root + "/static/styles",
    images: root + "/assets/img/**/*",
    imagesDist: root + "/assets/minified/img",
    imagesWebpDist: root + "/assets/webp",
  };

function cleanData() {
  return src([paths.clean], { read: false, allowEmpty: true }).pipe(clean());
}

task("styles", function () {
  var sassOptions = {};
  //var sassOptions = { outputStyle: 'compressed' };
  return src(paths.input)
    .pipe(sass(sassOptions))
    .pipe(autoprefixer())
    .pipe(dest(paths.output));
});

task("stylesProd", function () {
  return src(`${root}/assets/scss/**/*.scss`)
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(rename("main.min.css"))
    .pipe(dest(`${root}/assets/css`));
});

function buildStylesProd() {
  var sassOptions = { outputStyle: "compressed" };
  return src(`${root}/assets/scss/**/*.scss`)
    .pipe(sass(sassOptions))
    .pipe(autoprefixer())
    .pipe(rename("main.min.css"))
    .pipe(dest(`${root}/assets/css`));
}

function buildStyles() {
  var sassOptions = { outputStyle: "compressed" };
  return src(paths.input)
    .pipe(sass(sassOptions))
    .pipe(autoprefixer())
    .pipe(dest(paths.output, "main.min.css"));
}

function watchStylesProd() {
  return watch(`${root}/assets/scss/**/*.scss`, series("stylesProd"));
}

function watchStyles() {
  return watch(paths.input, series("styles"));
}

exports.watch = watchStyles;
exports.buildCss = buildStyles;
exports.buildProd = buildStylesProd;
exports.buildDev = watchStylesProd;