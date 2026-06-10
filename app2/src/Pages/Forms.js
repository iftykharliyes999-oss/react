import React, { useState } from "react";

export default function Forms() {
  const [input, setInput] = useState({
    fullName: "",
    address: "",
    district: "",
  });

  console.log(input);

  function handleChange(e) {
    const { name, value } = e.target;

    setInput((values) => ({
      ...values,
      [name]: value,
    }));
  }

  return (
    <div className="container mt-4">
      <h3>Registration Form</h3>

      {/* Name */}
      <label>Enter Your Name</label>
      <input
        type="text"
        name="fullName"
        value={input.fullName}
        onChange={handleChange}
        className="form-control"
        placeholder="Enter your full name"
      />

      <br /> 
      GENDER: <br />
      Male: <input type="radio" name="gender" id="" value="male" checked={input.gender==="male"} onChange={handleChange}/> 
      Female: <input type="radio" name="gender" id="" value="female" checked={input.gender==="female"} onChange={handleChange}/> <br />

      {/* Address */}
      <label>Enter Your Address</label>
      <textarea
        name="address"
        value={input.address}
        onChange={handleChange}
        className="form-control"
        rows="4"
        placeholder="Enter your address"
      ></textarea>

      <br />

      {/* District */}
      <label>Select District</label>
      <select
        name="district"
        value={input.district}
        onChange={handleChange}
        className="form-control"
      >
        <option value="">SELECT ONE</option>
        <option value="DHAKA">DHAKA</option>
        <option value="SYLHET">SYLHET</option>
        <option value="MYMENSINGH">MYMENSINGH</option>
        <option value="CTG">CTG</option>
      </select>
    </div>
  );
}