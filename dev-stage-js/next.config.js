const path = require('path')

module.exports = {
    sassOptions: {
        includePaths: [path.join(__dirname, 'assets/css')],
    },
    trailingSlash: true,
    env: {
        NEXT_PUBLIC_URL_IMAGES_FROM_SERVER : 'https://admin.stage-tunisie.tn/uploads',
    },
	distDir: 'build',
   
    
}