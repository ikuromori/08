document.addEventListener("DOMContentLoaded", () => {
    liff
      .init({
        liffId: '1656174329-NyZyJ3o0'
      })
      .then(() => {
          liff.getProfile()
          .then(profile => {
          const name = profile.displayName;
          const id = profile.userId;
          document.getElementById('linename').value += name;
          document.getElementById('lineid').value += id;
          })
          .catch((err) => {
          console.log('error', err);
          });
        });
      })