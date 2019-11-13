# grocery-list-vue
Simple Vue.js app to keep track of grocery list. Using Laravel in the backend with API Resources for Models


# Setup Instructions
1. Download MAMP, LAMP, XAMP in order to bring up a test environment quickly
2. Copy the project folder or symlink to the correct directory so that MAMP,XAMP,LAMP could render.
   On my mac my MAMP htdocs was located at: /Applications/MAMP/htdocs
3. Next you need to modify DB_SOCKET in your .env file based on your installation. The current value will only work if your on a mac
4. Next run composer install in case the project is missing some files.
5. Head over to php my admin and create a new database grocery. the URL for this on my mac was: http://localhost:8888/MAMP/index.php?page=phpmyadmin&language=English
6. Next, go intp the grocery-app/ and run npm install
7. next run npm run dev => this should go through all the components file and send it over to app.js

Open up the entry file using localhost url based on MAMP,LAMP,XAMP installation. it should begin rendering the simple grocery app.