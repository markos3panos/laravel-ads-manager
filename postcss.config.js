import postcssNesting from 'postcss-nesting'
import tailwind from '@tailwindcss/postcss'
import autoprefixer from 'autoprefixer'

export default {
  plugins: [
    postcssNesting(),
    tailwind(),       // ✅ use @tailwindcss/postcss (not 'tailwindcss')
    autoprefixer(),
  ],
}
