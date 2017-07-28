Sensible Drupal 7 theme is based on Bootstrap.
- The Drupal 7 theme requires Bootstrap for Drupal (http://drupal.org/project/bootstrap)
- Also Requires jQuery Update (https://www.drupal.org/project/jquery_update)

Sensible theme is based on SASS, so to make changes use 
- For Variable changes use 'scss/_default-variables.scss'
- For overrides user scss/_overrides.scss
- For Other theme based changes use sensible.scss

To run gulp Sass.
- Go to the theme directory inside your terminal
- As we are using Yarn (A package manager), please install nodejs > 4 and npm. 
- To install Yarn run 'npm install yarn'
- After installing yarn, inside your theme folder run 'yarn', it will install all the node dependencies.
- To compile css for the first time, use 'gulp sass'
- To run watch use 'gulp watch' and when you make changes in any scss files, the css will be automatically generation.
