
import { Routes, Route, Outlet, BrowserRouter } from "react-router-dom";

import Header from "./components/Header";

import Home from "./Pages/Home";
import About from "./Pages/About";
import Contact from "./Pages/Contact";
import Footer from "./components/Footer";
import Props from "./Pages/Props";
import Eventes from "./Pages/Eventes";
import Lists from "./Pages/Lists";
import Forms from "./Pages/Forms";

function Layout() {
  return (
    <>
      <Header />
      <Outlet />
      <Footer />
    </>
  );
}

export default function Allroutes() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Layout />}>
          <Route index element={<Home />} />
          <Route path="about" element={<About />} />
          <Route path="contact" element={<Contact />} />
          <Route path="Props" element={<Props />} />
          <Route path="eventes" element={<Eventes />} />
          <Route path="lists" element={<Lists />} />
          <Route path="forms" element={<Forms />} />
          
    
          

          


        </Route>
      </Routes>
    </BrowserRouter>

  );
}
