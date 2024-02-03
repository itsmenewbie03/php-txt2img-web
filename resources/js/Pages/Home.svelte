<script>
    let user = "itsmenewbie03";
    let img_src =
        "https://replicate.delivery/pbxt/9x87a9i8adKdJZoiMbbnfdfCXX3e6VLIO53X5gx9XbM7beLJB/out-0.png";
    let desc = "";

    const gen_img = async () => {
        // TODO: call internal api
        const resp = await fetch("api/image/gen", {
            method: "POST",
            headers: {
                "content-type": "application/json",
            },
            body: JSON.stringify({
                prompt: desc,
            }),
        }).then((res) => res.json());
        img_src = resp.img_url ?? img_src;
    };
</script>

<div
    class="container min-h-screen min-w-full p-5 flex flex-col bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
>
    <p class="text-3xl text-white text-center font-bold">
        Simple Text to Image Tool built with Laravel by {user}
    </p>
    <img
        class="rounded-lg mt-1 h-full max-h-[450px] object-scale-down aspect-square mb-2"
        src={img_src}
        alt="nothing xD"
    />
    <input
        type="text"
        class="input input-bordered input-primary"
        placeholder="Enter your prompt"
        bind:value={desc}
    />
    <button class="btn btn-primary mt-2" on:click={gen_img}
        >Generate Image</button
    >
</div>
