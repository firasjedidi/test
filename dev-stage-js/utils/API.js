import axios from "axios";

export default axios.create({
    baseURL: "https://admin.stage-tunisie.tn/api/",
    responseType: "json"
});