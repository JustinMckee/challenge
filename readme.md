# Features & Contents Explained

## 2 Plugins & Modified Theme

  1. JSL Gutenberg Blocks
  2. JSL New Letter Post Type
  3. A modified theme with a new page template and subtle style changes


### Docker environment

The latest official Wordpress docker image was used. Volumes have been setup for database, plugins, theme, and uploads directory.

`$ docker-compose up -d` will run the container. The database and images have not been included in this repository. They are included in an export file separately as requested.


### All Blocks

All blocks are built without ACF, using Block API v2.0 and the @wordpress/scripts npm package. All blocks are defined with the recommended block.json meta file. Each block is isolated as a stand-along component so only the files needed to run each block are loaded only when each block is required.

### Feed Block

The Feed block pulls in the latest 2 posts in the Newsletter post type. This block is not configurable as it only serves as a prototype. It fetches data from the @wordpress/data package and uses the UseSelect hook.

### Media Bundle Block

The Media Bundle block makes use of the InnerBlocks component and establishes a locked template containing core Wordpress blocks.

### Simple Text Block

The Simple Text block makes use of the InnerBlocks component and establishes a locked template containing core Wordpress blocks.

### Page Template

A Wordpress template called Landing Page was created for this project. It removes the Aside element containing Widgets that was a part of the JSL Theme

### Global Site Header & Footer

As a demonstration of reusability, the site header and footer are global elements

### New Letters Options

An options page has been created as a sub-menu of the New Letter post-type. It contains an option to control the text within the site footer.

### Customizer Options Bonus

As an example of using the Customizer, the Site Identity tab contains new fields that allow the Text and URL to be changed above the header.

### Missing Build Process Added

Underscores had the sass directory reintroduced in order to run the npm scripts in the package.json for the theme
