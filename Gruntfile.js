module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        files: {
          'assets/css/default.css' : 'assets/scss/default.scss'
        }
      }
    },
    php: {
        dist: {
            options: {
                port: 8000
            }
        },
        watch: {}
   },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-php');
  grunt.registerTask('default',['php:watch', 'watch']);
}
