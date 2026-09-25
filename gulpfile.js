import {src, dest, watch} from 'gulp';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
import sourceMaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass);


/* rutas */
const routes = {
    styles:'./src/scss/**/*.scss',
    destination:'./build'
}


export function compilarCss(done){
    src('./src/scss/**/*.scss')
        .pipe(sourceMaps.init())
        .pipe(sass({style:'compressed'}).on('Error', sass.logError))
        .pipe(sourceMaps.write())
        .pipe(dest(`./build/css`))
        done()
}




export function dev(){
    watch(`${routes.styles}`, compilarCss)
}