/* Setup Rounting For All Pages */
hotelUserApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/dashboard");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('dashboard', {
    	url: "/dashboard",
    	templateUrl: "/dashboard",
    	data: {pageTitle: 'Dashboard'},
    	controller: "DashboardController",
    	resolve: {
    		deps: ['$ocLazyLoad', function ($ocLazyLoad) {
    			return $ocLazyLoad.load({
    				name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/DashboardController.js'
                    ]
                });
    		}]
    	}
    })



    .state('about', {
        url: "/about",
        templateUrl: "/about",
        data: {pageTitle: 'About'},
        controller: "AboutController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/AboutController.js'
                    ]
                });
            }]
        }
    })


    .state('packages', {
        url: "/packages",
        templateUrl: "/packages",
        data: {pageTitle: 'Packages'},
        controller: "PackagesController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/PackagesController.js'
                    ]
                });
            }]
        }
    })


    .state('blog', {
        url: "/blog",
        templateUrl: "/blog",
        data: {pageTitle: 'Blog'},
        controller: "BlogController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/BlogController.js'
                    ]
                });
            }]
        }
    })


      .state('contact', {
        url: "/contact",
        templateUrl: "/contact",
        data: {pageTitle: 'Contact'},
        controller: "ContactController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/ContactController.js'
                    ]
                });
            }]
        }
    })


      .state('login', {
        url: "/login",
        templateUrl: "/login",
        data: {pageTitle: 'Login'},
        controller: "LoginController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/LoginController.js'
                    ]
                });
            }]
        }
    })


      .state('hotelSearch', {
        url: "/hotelSearch",
        templateUrl: "/hotelSearch",
        data: {pageTitle: 'Hotel Search'},
        controller: "HotelSearchController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelUserApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/HotelSearchController.js'
                    ]
                });
            }]
        }
    })

    


}]);
