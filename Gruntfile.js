module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            frontend: {
                options: {
                    paths: ["css"],
                    cleancss: true
                },
                files: {"build/style.css": "less/style.less"}
            }
        },

        cssmin: {
            frontend: {
                files: {
                    'build/style.min.css': ['build/style.css']
                }
            }
        },

        concat: {
            frontend: {
                src: [
                    'bower_components/jquery/dist/jquery.js',
                    'bower_components/bootstrap/dist/js/bootstrap.js',
                    'bower_components/bootstrap-select/dist/js/bootstrap-select.js',
                    'bower_components/jquery-validation/dist/jquery.validate.js',
                    'bower_components/jquery-maskedinput/dist/jquery.maskedinput.js',
                    'bower_components/spin.js/spin.js',
                    'bower_components/spin.js/jquery.spin.js',
                    'bower_components/bxslider-4/dist/jquery.bxslider.js',
                    'bower_components/fancybox/source/jquery.fancybox.js',
                    'bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js',
                    'bower_components/farbtastic/src/farbtastic.js',
                    'js/jquery.bxslider-alt.js',
                    'js/to-top-scroll.jquery.js',
                    'js/script.js',
                    'js/remove-me.js'
                ],
                dest: 'build/script.js'
            }
        },

        uglify: {
            frontend: {
                src: 'build/script.js',
                dest: 'build/script.min.js'
            }
        },

        sprite:{
            less: {
                src: 'images/sprites/*.png',
                dest: 'build/spritesheet.png',
                destCss: 'build/sprites-vars.less'
            },
            css: {
                src: 'images/sprites/*.png',
                dest: 'build/spritesheet.png',
                destCss: 'build/sprites.less',
                cssFormat: 'css',
                cssOpts: {
                    cssSelector: function (item) {
                        return '.mt-' + item.name;
                    }
                }
            }
        },

        svg_sprite: {
            basic: {
                expand: true,
                src: ['images/svg/*.svg'],
                dest: 'build/svg',

                // Target options
                options: {
                    mode: {
                        prefix: "svg-%s",
                        css: {     // Activate the «css» mode
                            render: {
                                css: true  // Activate CSS output (with default options)
                            }
                        }
                    }
                }
            }
        },

        clean: {
            frontend: ["build/*"]
        },

        watch: {
            frontend: {
                files: ['js/**/*.js', 'images/sprites/*', 'images/svg/*', 'less/**/*.less'],
                tasks: ['sprite', 'svg_sprite', 'less:frontend', 'cssmin:frontend', 'concat:frontend', 'uglify:frontend'],
                options: {
                    livereload: true,
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-svg-sprite');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['clean:frontend', 'sprite', 'svg_sprite', 'less', 'cssmin', 'concat', 'uglify', 'watch']);

};