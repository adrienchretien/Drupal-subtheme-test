module.exports = function (grunt) {
  "use strict";
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      },
      scripts: {
        files: ['./js/includes/*.js'],
        tasks: ['jshint', 'concat:js'], //, 'uglify'],
        options: {
          nospawn: true,
          livereload: 45729
        }
      },
      options: {
        livereload: true,
      },
    },

    sass: {
      dist: {
        files: {
          'css/style.css': 'css/sass/style.scss'
        }
      }
    },
    concat: {
      options: {
        separator: ';'
      },
      js: {
        src: ['./js/includes/*.js'],
        dest: './js/compiled.js'
      },
    },
    jshint: {
      all: ['js/src/'],

      options: {
        loopfunc: true
      },
    },
    imagemin: {                          // Task
      static: {                          // Target
        options: {                       // Target options
          optimizationLevel: 3,
          svgoPlugins: [{ removeViewBox: false }]
        },
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['watch', 'imagemin']);
};
