

export default function () {
    const shoot = () => {
        alert("Great Shot!");
    }
    return (
        <>
            <h3>this is all about events</h3>
            <button onClick={shoot}>Take the Shot!</button>
        </>
    )
}
