module.exports = function(grunt) {

// 1. All configuration goes here 
grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
        // 2. Configuration for concatinating files goes here.
        dist: {
            src: [
        'dist/js/libs/*.js', // All Underscores JS and Main JS
        ],
        dest: 'dist/build/production.js',
    }     
},
uglify: {
    build: {
        src: 'dist/build/production.js',
        dest: 'dist/build/production.min.js'
    }
},
imagemin: {
    dynamic: {
        files: [{
            expand: true,
            cwd: 'dist/images/',
            src: ['**/*.{png,jpg,gif}'],
            dest: 'dist/images/build/'
        }]
    }
},

sass: {
    dist: {
        options: {
            style: 'compressed'
        },
        files: {
            'style.css': 'dist/scss/style.scss'
        }
    } 
},

watch: {
    options: {
        livereload: true,
    },

    scripts: {
        files: ['dist/js/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
            spawn: false,
        }
    }, 
    css: {
        files: ['dist/scss/**/*.scss'],
        tasks: ['sass'],
        options: {
            spawn: false,
        }
    }
}



});

// 3. Where we tell Grunt we plan to use this plug-in.
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.loadNpmTasks('grunt-uncss');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-contrib-htmlmin');
// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch']);
};  