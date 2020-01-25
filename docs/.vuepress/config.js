module.exports = {
    title: 'Codeigniter 4 Starterkit',
    description: 'Codeigniter 4 starterkit',
    base: "/ci-starterkit/",
    locales: {
        // The key is the path for the locale to be nested under.
        // As a special case, the default locale can use '/' as its path.
        '/': {
            lang: 'en-US', // this will be set as the lang attribute on <html>
            title: 'Codeigniter Starterkit',
            description: 'Vue-powered Static Site Generator'
        },
        '/id/': {
            lang: 'id-Bahasa',
            title: 'Codeigniter Starterkit',
        }
    },
    themeConfig: {
        repo: 'codeigniter-id/ci-starterkit',
        // Customising the header label
        // Defaults to "GitHub"/"GitLab"/"Bitbucket" depending on `themeConfig.repo`
        repoLabel: 'Contribute!',
        // if your docs are in a different repo from your main project:
        docsRepo: 'vuejs/vuepress',
        // if your docs are not at the root of the repo:
        docsDir: 'docs',
        // if your docs are in a specific branch (defaults to 'master'):
        docsBranch: 'master',



        locales: {
            // The key is the path for the locale to be nested under.
            // As a special case, the default locale can use '/' as its path.
            '/': {
                lang: 'en-US', // this will be set as the lang attribute on <html>
                title: 'VuePress',
                description: 'Vue-powered Static Site Generator'
            },
            '/id/': {
                lang: 'id-Bahasa',
                title: 'Codeigniter Starterkit',
                description: 'Codeigniter Starterkit',
                nav: [
                    { text: 'Facebook Group', link: 'https://www.facebook.com/groups/codeigniter.id' }
                ],
                algolia: {},
                sidebar: [
                    {
                        title: 'Setup dan Instalasi',   // required
                        path: '/foo/',      // optional, which should be a absolute path.
                        collapsable: false, // optional, defaults to true
                        sidebarDepth: 1,    // optional, defaults to 1
                        children: [
                            '/'
                        ]
                    },
                    {
                        title: 'Template dan Layouting',   // required
                        path: '/foo/',      // optional, which should be a absolute path.
                        collapsable: false, // optional, defaults to true
                        sidebarDepth: 1,    // optional, defaults to 1
                        children: [
                            '/'
                        ]
                    },
                    {
                        title: 'Troubleshooting',   // required
                        path: '/foo/',      // optional, which should be a absolute path.
                        collapsable: false, // optional, defaults to true
                        sidebarDepth: 1,    // optional, defaults to 1
                        children: [
                            '/'
                        ]
                    }
                ]
            }
        }
    }

}