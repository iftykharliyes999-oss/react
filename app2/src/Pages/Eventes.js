

export default function () {
    const shoot = () => {
        alert("Great Shot!");
    }

        const today = "tuesday";

    return (
        <>
            <h3>this is all about events</h3>
            <button onClick={shoot}>Take the Shot!</button>

            <h3>CONDITION</h3>
            {today=="friday" ? "OFFICE IS OPEN":"COME OTHESR DAY" }
            <br />
            {today=="tuesday" && "office is open"} 
        </>
    )
}
