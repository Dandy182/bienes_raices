import {src, dest, watch} from 'sass';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';

const sass = gulpSass(dartSass);


/* rutas */
const routes = {
    styles:'./src/scss/**/*.scss',
    dest:'./build'
}


export function Css(done){
    src(routes.styles)
        .pipe(sass({outpustyle:'compress'}).onError(sass.log))
        .pipe()
}