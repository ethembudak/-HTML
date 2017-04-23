module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        //Open the package.json
        pkg: grunt.file.readJSON('package.json'),

        //The Concat Task
        concat: {
			dist: {
				options: {
					separator: '\n\r',
					banner: '/*\nConcatinated JS file \n' +
							'Author: Mobilazor \n' +
							'Created Date: <%= grunt.template.today("yyyy-mm-dd") %>' +
							'\n */ \n'
				},
				// select the files to concagenate
				src: ['assets/**/*.js'],
				// the resulting JS file
				dest: 'assets/project.js'
			}
        },

        //Task for js Minification
        uglify: {

        },

        //Task for change tracker
        watch:{

        },

        //Sass compiler
        sass: {

        },

        // Minify CSS
        cssmin: {

        }
    });
};