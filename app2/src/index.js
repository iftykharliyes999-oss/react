import React from 'react';
import ReactDOM from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <App /> {/* 👈 এখান থেকে <BrowserRouter> একদম মুছে ফেলেছি */}
  </React.StrictMode>
);
// const abc = ReactDOM.createRoot(document.getElementById(abc));
// root.render(
//   <React.StrictMode> 
//     <car brand="toyota" color="red"/>
//   </React.StrictMode>
// );

reportWebVitals();
