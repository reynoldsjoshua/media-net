module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            padding: {
                p18: '1.125rem',
            },
            maxWidth: {
                '1920': '120rem',
                '1200': '75rem',
            },
            width: {
                'sideNav': '18.1875rem',
            },
            backgroundColor: theme => ({
                'dark-blue': '#30385A',
                'darker-blue': '#0E1130',
            })
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}