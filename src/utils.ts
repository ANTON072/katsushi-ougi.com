export const timeFormat = (iso: string): string => {
  try {
    // ISOフォーマットの日付文字列を Date オブジェクトに変換
    const date = new Date(iso);

    // 無効な日付の場合はエラーを投げる
    if (isNaN(date.getTime())) {
      throw new Error('Invalid date format');
    }

    // 年、月、日を取得して2桁に整形
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');

    // 時、分、秒を取得して2桁に整形
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    const seconds = String(date.getSeconds()).padStart(2, '0');

    // yyyy/mm/dd HH:mm:ss 形式の文字列を返却
    return `${year}/${month}/${day} ${hours}:${minutes}:${seconds}`;
  } catch (error) {
    // エラーが発生した場合は空文字を返す
    console.error('日付のフォーマットに失敗しました:', error);
    return '';
  }
};
