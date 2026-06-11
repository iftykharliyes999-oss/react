import axios from "axios";
import React, { useState } from "react";

export default function Forms() {
  const [input, setInput] = useState({
    name: "",
    gender: "",
    address: "",
    district: "",
  });

  function handleChange(e) {
    const { name, value } = e.target;

    setInput((prev) => ({
      ...prev,
      [name]: value,
    }));
  }

  function handleSubmit(e) {
    e.preventDefault();

    console.log("Sending:", input);

    axios
      .post(
        "http://localhost/REACT/app2/api/user_create.php",
        input,
        {
          headers: {
            "Content-Type": "application/json",
          },
        }
      )
      .then((res) => {
        console.log(res.data);
        alert(res.data.message);
      })
      .catch((err) => {
        console.error(err);
      });
  }

  return (
    <div className="container mt-4">
      <h3>Registration Form</h3>

      <form onSubmit={handleSubmit}>
        <label>Name</label>
        <input
          type="text"
          name="name"
          value={input.name}
          onChange={handleChange}
          className="form-control"
        />

        <br />

        <label>Gender</label>
        <br />

        <input
          type="radio"
          name="gender"
          value="male"
          checked={input.gender === "male"}
          onChange={handleChange}
        />
        Male

        <input
          type="radio"
          name="gender"
          value="female"
          checked={input.gender === "female"}
          onChange={handleChange}
          className="ms-3"
        />
        Female

        <br />
        <br />

        <label>Address</label>
        <textarea
          name="address"
          value={input.address}
          onChange={handleChange}
          className="form-control"
        />

        <br />

        <label>District</label>
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

        <br />

        <button type="submit" className="btn btn-primary">
          SUBMIT
        </button>
      </form>
    </div>
  );
}