import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gray: {
                    50: '#f9fafb', 150: '#f3f4f6', 250: '#e5e7eb', 350: '#d1d5db', 450: '#9ca3af',
                    550: '#6b7280', 650: '#4b5563', 750: '#374151', 850: '#1f2937', 950: '#111827',
                },
                red: {
                    50: '#fef2f2', 150: '#fee2e2', 250: '#fecaca', 350: '#fca5a5', 450: '#f87171',
                    550: '#ef4444', 650: '#dc2626', 750: '#b91c1c', 850: '#991b1b', 950: '#7f1d1d',
                },
                yellow: {
                    50: '#fefce8', 150: '#fef9c3', 250: '#fef08a', 350: '#fde047', 450: '#facc15',
                    550: '#eab308', 650: '#ca8a04', 750: '#a16207', 850: '#854d0e', 950: '#713f12',
                },
                green: {
                    50: '#f0fdf4', 150: '#dcfce7', 250: '#bbf7d0', 350: '#86efac', 450: '#4ade80',
                    550: '#22c55e', 650: '#16a34a', 750: '#15803d', 850: '#166534', 950: '#14532d',
                },
                blue: {
                    50: '#eff6ff', 150: '#dbeafe', 250: '#bfdbfe', 350: '#93c5fd', 450: '#60a5fa',
                    550: '#3b82f6', 650: '#2563eb', 750: '#1d4ed8', 850: '#1e40af', 950: '#1e3a8a',
                },
                indigo: {
                    50: '#eef2ff', 150: '#e0e7ff', 250: '#c7d2fe', 350: '#a5b4fc', 450: '#818cf8',
                    550: '#6366f1', 650: '#4f46e5', 750: '#4338ca', 850: '#3730a3', 950: '#312e81',
                },
                purple: {
                    50: '#faf5ff', 150: '#f3e8ff', 250: '#e9d5ff', 350: '#d8b4fe', 450: '#c084fc',
                    550: '#a855f7', 650: '#9333ea', 750: '#7e22ce', 850: '#6b21a8', 950: '#581c87',
                },
                pink: {
                    50: '#fdf2f8', 150: '#fce7f3', 250: '#fbcfe8', 350: '#f9a8d4', 450: '#f472b6',
                    550: '#ec4899', 650: '#db2777', 750: '#be185d', 850: '#9d174d', 950: '#831843',
                },
                teal: {
                    50: '#f0fdfa', 150: '#ccfbf1', 250: '#99f6e4', 350: '#5eead4', 450: '#2dd4bf',
                    550: '#14b8a6', 650: '#0d9488', 750: '#0f766e', 850: '#115e59', 950: '#134e4a',
                },
                orange: {
                    50: '#fff7ed', 150: '#ffedd5', 250: '#fed7aa', 350: '#fdba74', 450: '#fb923c',
                    550: '#f97316', 650: '#ea580c', 750: '#c2410c', 850: '#9a3412', 950: '#7c2d12',
                },
            },
        },
    },
    plugins: [],
};
