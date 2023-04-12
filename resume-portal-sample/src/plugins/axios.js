import axios from 'axios';
const axiosPlugin = {
  install(app, options) {
    const axiosInstance = axios.create({
      baseURL: options.baseURL,
    });
    app.provide('axios', axiosInstance);
  },
};
export default axiosPlugin;