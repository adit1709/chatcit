import "./bootstrap";

import ReactDOM from "react-dom/client";

const App = () => <h2>Halo dari React 👋</h2>;

const root = document.getElementById("react-root");
if (root) {
    ReactDOM.createRoot(root).render(<App />);
}
