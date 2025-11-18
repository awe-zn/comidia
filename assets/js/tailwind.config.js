tailwind.config = {
    theme: {
      container: {
        center: true,
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1280px',
        },
      },
      extend: {
        fontFamily: {
          sans: ['"Open Sans"', 'system-ui', 'sans-serif'],
          highlight: ['Poppins', 'system-ui', 'sans-serif'],
        },
        colors: {
          blue: {
            50:  '#f2f8fd',
            100: '#e5eef9',
            200: '#c5ddf2',
            300: '#91c1e8',
            400: '#57a0d9',
            500: '#3185c6', // cor principal
            600: '#2471b5',
            700: '#1c5488',
            800: '#1b4871',
            900: '#1c3d5e',
            950: '#12273f',
          },
          green: {
            50:  '#f8fce9',
            100: '#eef7d0',
            200: '#def0a6',
            300: '#c7e571',
            400: '#afd546',
            500: '#94bf28',
            600: '#71951b',
            700: '#567219',
            800: '#455a1a',
            900: '#3c4d1a',
            950: '#1e2a09',
          },
          neutral: {
            50:  '#f9fafb',
            100: '#f3f4f6',
            200: '#e5e7eb',
            300: '#d1d5db',
            400: '#9ca3af',
            500: '#6b7280',
            600: '#4b5563',
            700: '#374151',
            800: '#1f2933',
            900: '#111827',
          },
        },
      },
    },
  }