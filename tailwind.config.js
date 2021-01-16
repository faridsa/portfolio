module.exports = {
  plugins: [require("autoprefixer")],
  purge: [
    "./resources/views/**/*.php",
    "./resources/js/**/*.vue",
    "./resources/js/**/*.svelte",
  ],
  theme: {
    pagination: (theme) => ({
      link:
        "bg-platinum py-1 px-2 no-underline text-sm border border-solid border-gray-400",
      linkHover: "bg-gray-700 text-white",
    }),
    stroke: {
      current: "currentColor",
    },
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
    },
    fontFamily: {
      sans: [
        "system-ui",
        "-apple-system",
        "BlinkMacSystemFont",
        "Segoe UI",
        "Roboto",
        "Helvetica Neue",
        "Arial",
        "Noto Sans",
        "sans-serif",
        "Apple Color Emoji",
        "Segoe UI Emoji",
        "Segoe UI Symbol",
        "Noto Color Emoji",
      ],
    },
    borderWidth: {
      default: "1px",
      "0": "0",
      "2": "2px",
      "4": "4px",
    },
    extend: {
      fontFamily: {
        bebas: ["Bebas Neue", "sans-serif"],
      },
      colors: {
        black: "rgba(10, 10, 10, 1);",
        blue: "rgba(20, 33, 61, 1)",
        cyan: "rgba(0, 32, 56, 1)",
        orange: "rgba(252, 163, 17, 1)",
        platinum: "rgba(229, 229, 229, 1)",
        snow: "rgba(255,255,255,.55)",
        gray: {
          "100": "rgb(230, 230, 230)",
          "200": "rgb(204, 204, 204)",
          "300": "rgb(179, 179, 179)",
          "400": "rgb(153, 153, 153)",
          "500": "rgb(128, 128, 128)",
          "600": "rgb(102, 102, 102)",
          "700": "rgb(77, 77, 77)",
          "800": "rgb(51, 51, 51)",
          "900": "rgb(26, 26, 26)",
        },
      },
      spacing: {
        "80": "20rem",
        "96": "24rem",
        "128": "32rem",
      },
    },
  },
  corePlugins: {},
  variants: {
    backgroundColor: [
      "responsive",
      "hover",
      "focus",
      "group-hover",
      "focus-within",
      "odd",
      "even",
      "active",
    ],
    textColor: [
      "responsive",
      "hover",
      "focus",
      "group-hover",
      "focus-within",
      "active",
    ],
    zIndex: ["responsive", "focus"],
  },
  plugins: [],
};